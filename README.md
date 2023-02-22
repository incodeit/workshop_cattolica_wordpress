# workshop_cattolica_wordpress

## database

### backup
```
DB_NAME=workshop_cattolica_wordpress ; mysqldump -u root -proot $DB_NAME | gzip > _private/$DB_NAME-$(date +%Y-%m-%d-%H.%M.%S).sql.gz  
```

### restore
```
DB_NAME=workshop_cattolica_wordpress ; gunzip < _private/filename | mysql -u root -proot $DB_NAME
```