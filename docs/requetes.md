# Requêtes SQL

## Récupérer tous les produits

```sql
SELECT * FROM `product`
```

## Récupérer le produit ayant un id donné (#2)

```sql
SELECT *
FROM `product`
WHERE id = 2
```

## Récupérer tous les produits du type donnée (#3)

```sql
SELECT * 
FROM `product`
WHERE `type_id` = 3
```

## Récupérer tous les produits de la marque donnée (#4)

```sql
SELECT * 
FROM `product`
WHERE `brand_id` = 4
```

## Récupérer tous les produits de la catégorie donnée (#1)

```sql
SELECT * 
FROM `product`
WHERE `category_id` = 1
```

## Récupérer les 5 catégories à afficher sur la page d'accueil

```sql
SELECT * 
FROM `category`
WHERE `home_order` != 0
ORDER BY `home_order`
```

## Récupérer les 5 types à afficher dans le footer de la page d'accueil

```sql
SELECT * 
FROM `type`
WHERE `footer_order` != 0
ORDER BY `footer_order`
```

## Récupérer les 5 marques à afficher dans le footer de la page d'accueil

```sql
SELECT * 
FROM `brand`
WHERE `footer_order` != 0
ORDER BY `footer_order`
```
