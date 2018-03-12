#! /usr/bin/python

import cgi, cgitb

cgitb.enable()

def go():

    fs = cgi.FieldStorage()
    si = [fs.getvalue('name'), fs.getvalue('email'), fs.getvalue('tel'), fs.getvalue('message')]

    #old emails
    straw = open('emails.csv', 'rU')
    oldEmails = straw.read()
    straw.close()

    #write new one
    newEmail = si[0] + ',' + si[1] + ',' + si[2] + ',' + si[3] + '\n' + oldEmails
    lol = open("emails.csv", 'w+')
    lol.write(newEmail)
    lol.close()
    
    print 'Content-type: text/html\n\n'
    print """<html><head><script type="text/javascript"> window.location.replace("http://jajas.store/#"); </script></head><body>We should be redirecting you shortly. If any issue arises, please email jchirinos@jajas.store :)</body></html>"""

go()
