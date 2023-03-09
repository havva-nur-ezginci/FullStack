
--select * FROM calisan WHERE id BETWEEN 1 and 3;
INSERT INTO calisan VALUES(6 ,"ADA",1,1,2,1);

INSERT INTO calisan VALUES(7 ,"TOPRAK",null,1,2,1);


SELECT c.name,m.name,b.name,h.name from calisan c 
INNER JOIN meslek m ON c.meslek_id= m.id
INNER JOIN birim b ON c.birim_id=b.id
INNER JOIN hastane h ON c.hastane_id=h.id;

INSERT INTO hastane VALUES(3,"BOŞ HASTANE");

SELECT h.name,b.name from hastane h
LEFT JOIN birim b on h.id=b.hastane_id
ORDER BY  h.name;

SELECT h.name,b.name from hastane h
RIGHT JOIN birim b on h.id=b.hastane_id
ORDER BY  h.name;


SELECT h.name,b.name from hastane h
INNER JOIN birim b on h.id=b.hastane_id
ORDER BY  h.name;

-- Self Join

SELECT c.name,x.name from calisan c,calisan x
where c.id <> x.id and c.id=4;


SELECT c.name,x.name from calisan c,calisan x
where c.id = x.manager_id and (x.manager_id is not NULL);


SELECT COUNT(x.id) kayitsayisi,c.name from calisan c,calisan x
where c.id = x.manager_id and (x.manager_id is not NULL)
group by c.name
HAVING kayitsayisi > 1;


