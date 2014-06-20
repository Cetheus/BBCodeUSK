#BBCodeUSK

###Wozu dient der BBCode?

Der BBCode fügt die USK Logos in einen Beitrag ein.

Die USK logos sind SVG-Dateien und können beliebig skaliert werden ohne einen Qualitätsverlust zu erleiden.

###Wie wende ich den BBCode an?

Die Syntax sieht wie folgt aus:
```
[usk(='$alter','$größe')]$alter[/usk]
```

**$alter** lässt eine der fünf Altersangaben zu: 0, 6, 12, 16, 18

**$größe** nimmt Werte von 1-99 px an. Wenn keine Größe definiert wird, wird die Standardgröße von 64x64 Pixeln angezeigt

####Beispiel ohne Größenangabe

Der einfachste Weg, das Logo darzustellen, ist, dem BBCode einfach das Alter zu übergeben:
```
[usk]0[/usk]
```

####Beispiel mit Größenangabe

Die erste Stelle ist die Altersangabe, die zweite gibt die darzustellende Größe in px an.
```
[usk='0','32'][/usk]
```
