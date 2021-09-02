# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Dans les shoe | 5 categories | - |
| `/legal` | `GET` | `MainController` | `legal` | Legal notices | Displays all the legal notices | - |
| `/catalogue/category/[id]` | `GET` | `CatalogController` | `category` | [category] name | Displays product(s) of the category | id of the category that i'm asking for |
| `/catalogue/type/[id]` | `GET` | `CatalogController` | `type` | [type] name | Displays products of the type | id of the type that i'm asking for |
| `/catalogue/brand/[id]` | `GET` | `CatalogController` | `brand` | [brand] name | Displays products manufactured by the brand | id of the brand that i'm asking for |
| `/catalogue/product/[id]` | `GET` | `CatalogController` | `product` | [product] name | Displays product | id of the product that i'm asking for |
