#! /usr/bin/python

import cgi, cgitb

cgitb.enable()

from bs4 import BeautifulSoup
from urllib2 import urlopen
import urllib

def go():
    html = "http://jajas.store/emails.csv"
    strEmails = str(BeautifulSoup(urlopen(html).read(), 'html'))

    print 'Content-type: text/html\n\n'

    print '<html><body><table>'

    lEmail = strEmails.split('\n')
    for wholeEmail in lEmail:
        print '<tr>'
        #loec = ListOfComponents --> [name, email, phone, bod]
        loc = wholeEmail.split(',')
        for emailComponent in loc:
            print '<td><p>' + str(emailComponent) + '</p></td>'
        print '</tr>'
    print '</table></body></html>'
        
        
    
