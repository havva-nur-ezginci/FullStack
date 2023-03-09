
--select * FROM calisan WHERE id BETWEEN 1 and 3;


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