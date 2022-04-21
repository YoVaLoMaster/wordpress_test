cd www;
git clone https://github.com/WordPress/WordPress.git .;
rm .git;
cd ..;
docker-compose up -d;