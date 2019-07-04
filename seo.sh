#!/bin/bash
# Recoded from http://pastebin.com/raw/FmVGGiyc
# For update tools : https://valeiriya.osaka/

valog='SEO_Checked.txt';

MERAH='\e[38;5;196m'
HIJAU='\e[38;5;46m'
AQUA='\e[38;5;45m'
 
 header(){
printf "${HIJAU}"
cat << "EOF"
____   ____      .__         .__       .__                
\   \ /   /____  |  |   ____ |__|______|__|___.__._____   
 \   Y   /\__  \ |  | _/ __ \|  \_  __ \  <   |  |\__  \  
  \     /  / __ \|  |_\  ___/|  ||  | \/  |\___  | / __ \_
   \___/  (____  /____/\___  >__||__|  |__|/ ____|(____  /
               \/          \/              \/          \/ 
				www.valeiriya.osaka

----------------------[ SEO Checker ]----------------------

EOF
}
clear
header

function al3x4() {
	url=$1
	AL3X=$(curl -s "http://data.alexa.com/data?cli=10&url=$1" -L)
	grank=$(echo $AL3X | grep -Po '(?<=TEXT=")[^"]*')
	irank=$(echo $AL3X | grep -Po '(?<=RANK=")[^"]*' | head -2 | tail -1)
	country=$(echo $AL3X | grep -Po '(?<=NAME=")[^"]*')
	code=$(echo $AL3X | grep -Po '(?<=CODE=")[^"]*')
	if [[ -z $AL3X ]];then
		ALX='-';
	else
		ALX=$AL3X;
	fi
	echo '- Alexa Rank Global : '$grank;
	echo 'Alexa Rank Global : '$grank >> $valog;
	echo '- Alexa Rank Country : '$irank;
	echo 'Alexa Rank Country : '$irank >> $valog;
	echo "- Country : "$code - $country;
	echo "Country : "$code - $country  >> $valog;
}

function dailypv() {
	URL=$1;
	curl -s -F "go=Submit" -F "url=${URL}" -X POST "http://www.siteworthtraffic.com/" -o /dev/null
	PVD=$(curl -s "http://www.siteworthtraffic.com/report/${URL}" | grep '<td>Unique Pageviews</td>' | head -1 | sed 's|<td>||g' | sed 's|</td>||g' | awk '{print $4}');
	echo "- Daily Pageviews: ${PVD}";
	echo 'Daily Pageviews: '$PVD >> $valog;
}

function dapachk() {
	URL=$1;
	DAPA=$(curl -s -F "url_form=${URL}" -X POST http://www.scrolltotop.com/MozRank-Domain-Authority-Checker.php | grep ">${URL}<" | sed 's|<| |g' | sed 's|>| |g' | sed 's|td||g');
	DA=$(echo $DAPA | awk '{print $6}');
	PA=$(echo $DAPA | awk '{print $8}');
	echo '- Domain Authority: '$DA;
	echo 'Domain Authority: '$DA >> $valog
	echo '- Page Authority: '$PA;
	echo 'Page Authority: '$PA >> $valog
}

echo -ne 'Weblist: ';read urls;
echo '';

for urlz in $(cat $urls);
do
	url=$(echo $urlz | sed 's|http://||g' | sed 's|https://||g' | sed 's|/| |g' | awk '{print $1}' | sed 's|www.||g');
	echo -e "${MERAH}# SITE -> $url${AQUA}";
	echo $url >> $valog;
	al3x4 $url;
	dailypv $url;
	dapachk $url;
	echo '# END';
	echo '' >> $valog;
	echo '';
	sleep 1s
done
