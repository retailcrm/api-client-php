Here are some complex examples of pagination handling. In this case, we're using a special component that handles the pagination for us.
As a result, we can just iterate over batches of the data using `foreach`.

More than that, this component automatically handles rate limit exceptions.

* [Fetching customers](example_customers_list.php)
* [Fetching customers history](example_customers_history.php)
* [Pagination component (`PaginatedRequestIterator`)](PaginatedRequestIterator.php)
