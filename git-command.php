<?php

git init
git config --global user.name 'Nawal kishor'
git config --global user.email 'nawal.shakya@gmail.com'

git add session.php // single file
git add . // add every file

git status 
git rm --cached session.php

git commit
// remove # initial commit and close the file
git commit -m 'changed git-command.php' // if u want to skip all edit stage  


//gitignore command
log.txt
/dir2 // ignore directory
*.txt //ignore all text file
 

?>