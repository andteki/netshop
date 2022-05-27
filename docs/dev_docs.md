# Netshop

## Adatbázis

products(id, name, price, unit)
images(id, name, productId)

## Végpontok

| Végpontok | Metódus | Leírás |
|-----------|---------|------------------------------|
| products  | get     | Az összes termék lekérdezése |
| products  | post    | Új productum  |
| products/id | patch | Frissítés |
| products/id | delete | Törlés |
