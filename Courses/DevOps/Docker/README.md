# My Docker Notes

## Docker Logs Command

- [Source](https://geekflare.com/check-docker-logs/)

```yml
docker logs [OPTIONS] <CONTAINER-NAME OR ID>
```

```shell
docker build -t my-image .
```

## to fix internal server error

```shell
a2enmod rewrite
service apache2 restart
```

<VirtualHost localhost:80>
   ProxyPreserveHost On

   ProxyPass / http://127.0.0.1:7171/
   ProxyPassReverse / http://127.0.0.1:7171/
</VirtualHost>

## Environment variables

- *for yaml or yml files*

```shell
- ${DB_DATABASE}
- ${DB_USERNAME}
- ${DB_PASSWORD}
- ${DB_HOST}
```

## install ubuntu & commands

```shell
docker run -it ubuntu
echo $0
history
!12
```

## Manage and install Packages

```shell
apt-get update
apt update //update package database
apt-get install -y <package>
apt list
apt install nano
ctrl + l //clear screen
apt remove <package> // to remove package
```

## Navigating the File System

```shell
cd <directory>
pwd
ls
ls -l
ls -a
ls -1
cd ..
cd -
cd ~ // to home directory (telda)
cd a //to go to a directory press tab
mkdir <directory>
mv <file> <directory>
rm file*
rm -r <directory>
```

## Editing and Viewing Files

```shell
nano <file>
vim <file>
vi <file>
vi <file> +<line>
vi <file> <line>
vi <file> <line> <line>
cat <file>
less <file>
cat <file> | less
more <file>
head -n 5 /etc/adduser.conf
```

## Search and Replace

```shell
grep <search> <file>
grep -r <search> <directory>
grep -i <search> <file> // remove case sensitive
grep -ir <search> <directory>
```

