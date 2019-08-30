import platform
import os
import subprocess

print('uname:', platform.uname())
print('Operating System           :', platform.system())
print('System Name                :', platform.node())
print('Operating Release Version  :', platform.release())
print('Operating System Version   :', platform.version())
print('Machine Architechture      :', platform.machine())
print('Processor Type             :', platform.processor())
print('CPU Core Count             :', os.cpu_count())
print('System Architecture        :', platform.architecture())

if platform.system() == 'Windows':
    rep = subprocess.Popen('systeminfo', shell=True, stdout=subprocess.PIPE).stdout
else:
    rep = subprocess.Popen('sysinfo', shell=True, stdout=subprocess.PIPE).stdout

print('System Information: \n', rep.read())