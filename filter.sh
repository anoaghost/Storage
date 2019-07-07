 #!/usr/bin/env bash
	if [ -f "$1" ]; then
    a="\w+([\.-]?\w+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(com|org|net|int|edu|gov|mil|arpa|aero|biz|coop|info|museum|name|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?"
    b="[a-zA-Z0-9._-]+@(hotmail|outlook|msn|live|microsoft|windowslive|passport)\.[a-zA-Z.]+"
    c="[a-zA-Z0-9._-]+@(gmail|googlemail)\.[a-zA-Z.]+"
    d="[a-zA-Z0-9._-]+@(me|mac|icloud)\.[a-zA-Z.]+"
    e="[a-zA-Z0-9._-]+@(yahoo|ymail|rocketmail|y7mail|sky|rogers)\.[a-zA-Z.]+"
    f="[a-zA-Z0-9._-]+@(btinternet|btopenworld|btconnect|btmail|bt)\.[a-zA-Z.]+"
    g="[a-zA-Z0-9._-]+@(aol|love|ygm|games|wow|aim)\.[a-zA-Z.]+"
    h="[a-zA-Z0-9._-]+@(talktalk|tiscali|lineone|worldonline|dial.pipex|dsl.pipex|screaming|ukgateway|homecall|toucansurf|blueyonder|ntlworld|onetel|tinyworld|tinyonline)\.[a-zA-Z.]+"
    echo "[+] Start Extract Email Address"
    strings $1 | tr '[:upper:]' '[:lower:]' | grep -E -o -i $a $1 --binary-files=text | sort | uniq > temp_list && mv temp_list $1
    echo "[+] Done"
    echo "[+] Start Filter Microsoft"
    strings $1 | grep -E -o -i $b $1 | sort | uniq -i > Microsoft_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Google"
    strings $1 | grep -E -o -i $c $1 | sort | uniq -i > Google_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Apple"
    strings $1 | grep -E -o -i $d $1 | sort | uniq -i > Apple_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Yahoo"
    strings $1 | grep -E -o -i $e $1 | sort | uniq -i > Yahoo_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Bt"
    strings $1 | grep -E -o -i $f $1 | sort | uniq -i > Bt_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Aol"
    strings $1 | grep -E -o -i $g $1 | sort | uniq -i > Aol_"$1"
    echo "[+] Done"
    echo "[+] Start Filter TalkTalk"
    strings $1 | grep -E -o -i $h $1 | sort | uniq -i > TalkTalk_"$1"
    echo "[+] Done"
    echo "[+] Start Filter Other"
    strings $1 | grep -E -v -i "$b|$c|$d|$e|$f|$g|$h" $1 | sort | uniq -i > Other_"$1"
    echo "[+] Done"
    echo "[+] Exiting......."
	else
    echo "Expected a file at $1, but it doesn't exist." >&2
  fi
  exit
  fi

