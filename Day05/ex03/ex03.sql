INSERT INTO db_cking.ft_table(login, creation_date, `group`)
SELECT
    last_name,
    birthdate,
    'other'
FROM
    user_card
WHERE
    INSTR(last_name, "a") AND(LENGTH(last_name) < 9)
ORDER BY
    last_name
LIMIT 10;