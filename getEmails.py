#! /usr/bin/python

import cgi, cgitb

cgitb.enable()

from bs4 import BeautifulSoup
from urllib2 import urlopen
import urllib

def go():
    print 'Content-type: text/html\n\n'

    print '<html><body><table border="1">'

    straw = open('emails.csv', 'rU')

    lEmail = straw.read().split('\n')
    for wholeEmail in lEmail:
        print '<tr>'
        #loec = ListOfComponents --> [name, email, phone, bod]
        loc = wholeEmail.split(',')
        for emailComponent in loc:
            print '<td><p>' + str(emailComponent) + '</p></td>'
        print '</tr>'
    print '</table></body></html>'

go()
    
