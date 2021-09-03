# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Dans les shoe | 5 categories | - |
| `/legal` | `GET` | `MainController` | `legal` | Legal notices | Displays all the legal notices | - |
| `/catalog/category/[id]` | `GET` | `CatalogController` | `category` | [category] name | Displays product(s) of the category | [id] => id of the category that i'm asking for |
| `/catalog/type/[id]` | `GET` | `CatalogController` | `type` | [type] name | Displays products of the type | [id] => id of the type that i'm asking for |
| `/catalog/brand/[id]` | `GET` | `CatalogController` | `brand` | [brand] name | Displays products manufactured by the brand | [id] => id of the brand that i'm asking for |
| `/catalog/product/[id]` | `GET` | `CatalogController` | `product` | [product] name | Displays product | [id] => id of the product that i'm asking for |
