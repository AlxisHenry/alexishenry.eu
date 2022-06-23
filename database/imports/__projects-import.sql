use main;
INSERT INTO projects (title, url_name, description, author, GithubLink, linkImage, languages, published_at, edit_at)
VALUES
    ('Inventory Management', 'timken', "Durant mon alternance chez Timken, j'ai réalisé une interface web permettant la gestion du stock de Colmar.", 'Henry Alexis','https://github.com/AlxisHenry/stock-interface-app','gs-timken.png', 'PHP,javascript,powershell', (SELECT NOW()), (SELECT NOW()) ),
    ('Sport Addict', 'sport-addict', "Durant mes études, il m''a été demandé de remettre en forme un site web. Cela à l''aide de langages front.", 'Henry Alexis', 'https://github.com/AlxisHenry/Learn-CSS-Schlegel', 'gs-sport_addict.png', 'HTML,css,javascript', (SELECT NOW()), (SELECT NOW()) ),
    ('Portfolio', 'portfolio', "Création d'un portfolio basé sur Laravel", 'Henry Alexis', 'https://github.com/AlxisHenry/CCI-2021-PORTFOLIO', "gs-portfolio.png", 'laravel,PHP,javascript,scss' , (SELECT NOW()), (SELECT NOW()))