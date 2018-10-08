SELECT
    film.title AS "Title",
    DATEDIFF(
        MAX(DATE(`date`)),
        MIN(DATE(`date`))
    ) AS 'uptime'
FROM
    member_history
INNER JOIN film ON member_history.id_film = film.id_film
GROUP BY
    film.id_film;