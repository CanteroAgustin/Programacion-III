1# SELECT `pNumero`, `pNombre`, `Precio`, `Tamaño` FROM `productos` ORDER BY pNombre ASC

2# SELECT * FROM `provedores` AS ProvedoresDeQuilmes WHERE Localidad = 'Quilmes'

3# SELECT e.Numero, e.pNumero, e.Cantidad, p.pNombre AS Producto, pr.Nombre AS Provedor 
	FROM `envios` AS e, `productos` AS p, `provedores` AS pr 
	WHERE e.Numero = pr.Numero AND e.pNumero = p.pNumero AND e.Cantidad BETWEEN 200 AND 300

4# SELECT SUM(Cantidad) as TotalProductosEnviados FROM `envios` 

5# SELECT `pNumero` AS NumeroDeProducto FROM `envios` LIMIT 0,3

6#


SELECT p.pNombre AS Producto, p.Precio, p.Tamaño, e.Numero AS NumeroDeEnvio, e.Cantidad, pr.Nombre AS Provedor 
	FROM `productos` AS p, `envios` AS e, `provedores` AS pr 
	WHERE p.pNumero = e.pNumero AND e.Numero = pr.Numero ORDER BY p.pNombre ASC 