#!/usr/bin/env python
# -*- coding: utf-8 -*-

import urllib

link = "https://www.foto-webcam.eu/webcam/luftschiff/?frame=1"
f = urllib.urlopen(link)
myfile = f.read()

dateBeginStr = "\"date\":\"";
dateBegin = myfile.find(dateBeginStr);
dateEnd = myfile.find("\",", dateBegin);
readDate = myfile[dateBegin + len(dateBeginStr):dateEnd];

tempBeginStr = "\"wx\":\"";
tempBegin = myfile.find(tempBeginStr);
tempEnd = myfile.find("\",", tempBegin);
readTemp = myfile[tempBegin + len(tempBeginStr):tempEnd];
readTemp = readTemp.replace("\u00b0", "º");

print(readDate + ";" + readTemp);