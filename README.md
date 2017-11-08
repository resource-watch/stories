# Stories for Resource Watch

## Installation using docker

Very useful for **development**, as it ensures everyone has the same development environment.
You can install Docker from [here](https://www.docker.com).

Building docker container:

```bash
docker-compose build
```

Runing container:

```bash
docker-compose up
```

### Importing the database

A wordpress project is mainly kept in a database that keeps its state.
Therefore, this database should be imported into the one that exists in the external volume.

The dump of the database isn't saved in this git repository.

```
docker exec -i <IMAGE_ID>  mysql -uwordpress -pwordpress wordpress < dump.sql
```

## Connecting to the server

Open the browser on `http://localhost`
 


## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b feature/my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin feature/my-new-feature`
5. Submit a pull request :D


## License

[MIT](https://github.com/Vizzuality/internet-health-report/blob/master/LICENSE)
