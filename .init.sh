#! /bin/sh

echo "What is the project slug name (must be escaped) ?"
read PROJECT

echo "What is the project camelCase name ?"
read PROJECT_NAME

git grep -l "%%PROJECT%%" | xargs sed -i "s/%%PROJECT%%/$PROJECT/g"
git grep -l "%%PROJECT_NAME%%" | xargs sed -i "s/%%PROJECT_NAME%%/$PROJECT_NAME/g"
