# Tablepress add link to column plugin extension
Custom Extension for TablePress WordPress plugin to add a link with a get parameter to a column.

## Getting Started

For example: if you have a stock parts table and you want to redirect users to an order page when they click on the part ID, this is what this extension does.

### Prerequisites

* [Tablepress](https://br.wordpress.org/plugins/tablepress/) - You need to have the Tablepress plugin installed first.

### Installing

Set the $page_slug variable with the page slug you want to redirect your users.

```
$page_slug = 'order';
```

Set the $column_number variable with the column number you want to set the link and pass in the get parameter

```
$column_number = 1;
```
## Contributing

Feel free to contribute with improvements in this plugin.

## Authors

* [Adam Silva](http://www.adamsilva.com.br)

## License

This project is licensed under the GPLv3 License - see the [LICENSE.md](LICENSE.md) file for details

