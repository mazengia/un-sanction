@ECHO OFF
CLS
sqlplus -S EBPROD/password@10.1.10.218/Mock @C:\Users\B\Desktop\unsanction\unsanction\export.sql
ECHO.
ECHO script run successfully!!
ECHO.
PAUSE
EXIT