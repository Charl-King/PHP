SELECT
    last_name,
    first_name,
    CAST(birthdate AS DATE)
FROM
    user_card
WHERE
   YEAR(birthdate) LIKE "1989"
ORDER BY
    last_name;