# -*- coding: utf-8 -*-
"""
Created on Wed Jun  9 01:00:29 2021

@author: 11310
"""

import smtplib
from email.mime.text import MIMEText
import sys

def sendmail(mail, code):
    mail_host = "smtp.163.com"
    mail_user = "alexrenzr@163.com"
    mail_pass = "VDSMIWPTTKNQSNQD"
     
    sender = 'alexrenzr@163.com'
    receivers = [mail,'alexrenzr@163.com']
     
    content = 'Your verification code is '+code+'.\nWelcome to my website!\n'
    title = 'Blog Register Verification Code'
    message = MIMEText(content, 'plain', 'utf-8')
    message['From'] = "{}".format(sender)
    message['To'] = ",".join(receivers)
    message['Subject'] = title
     
    try:
        smtpObj = smtplib.SMTP_SSL(mail_host, 465)  # 启用SSL发信, 端口一般是465
        smtpObj.login(mail_user, mail_pass)  # 登录验证
        smtpObj.sendmail(sender, receivers, message.as_string())  # 发送
        return True
    except smtplib.SMTPException as e:
        return False
    
if __name__ == '__main__':
    mail, code = sys.argv[1], sys.argv[2]
    print(sendmail(mail, code))