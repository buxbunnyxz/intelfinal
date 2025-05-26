@echo off
REM Place this file in the root of your git repo and double-click to run

:loop
git add .
git diff-index --quiet HEAD
IF %ERRORLEVEL% NEQ 0 (
    git commit -m "Auto-commit on save"
    git push
)
timeout /t 2 >nul
goto loop