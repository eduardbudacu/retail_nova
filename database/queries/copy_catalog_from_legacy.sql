INSERT INTO retail_nova.categories (id, `name`) SELECT categorie_id, denumire_categorie FROM baza_retai.categorii;

INSERT INTO retail_nova.products (id, category_id, sku, `name`, `bar_code`, price, vat_id) SELECT produs_id, categorie_id, cod, denumire, cod_bare, pret, cotatva_id FROM baza_retai.produse;