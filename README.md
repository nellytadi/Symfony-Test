## Symfony API

**Create 2 API endpoints** 

The file `public/data/products.json`, contains a list of products. 

Create 2 API endpoints
1. One to return a count of the products grouped by price. For example;
    ```
   GET => http://localhost:8000/products/grouped-by-price
   
   Response =>
   
    {
      "products": [
        {
          "price": 10.5,
          "count": 1
        },
        {
          "price": 15.5,
          "count": 2
        }
      ]
    }
    ```
2. One to return the list of products excluding Products that are in the blacklisted categories list. See `App\Helper\Blacklist`.
    ```
    GET => http://localhost:8000/products" 
   
   Response =>
   {
    "total": 85,
    "products": [
        {
            "id": 1,
            "name": "Product 1",
            "price": 5.75,
            "category": "Pet Supplies"
        },
           .
           .
           .
        {
            "id": 85,
            "name": "Product 85",
            "price": 6.5,
            "category": "Fitness Equipment"
        },
   }
    ```
