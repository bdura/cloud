# Database

I use Postgres for my relational database needs.

## Environment variables

### Database

The environment variables necessary to the database container are defined in `pg.env` :

```
POSTGRES_USER=<user>
POSTGRES_PASSWORD=<password>
POSTGRES_DB=<database-name>
```

### Administration board

The environment variables necessary to the database administration container are defined in `pgadmin.env` :

```
PGADMIN_DEFAULT_EMAIL=<email>
PGADMIN_DEFAULT_PASSWORD=<password>
```

