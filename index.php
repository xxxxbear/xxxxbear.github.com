<?php
echo phpinfo();

git init
git add .
git commit -m "注释语句"
git pull origin master
git push -u origin master




删除

git rm -r --cached .
git add .
git commit -m ".gitignore is now working"


To undo git rm --cached filename, use git add filename.
