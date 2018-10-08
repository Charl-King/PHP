SELECT
    user_card.last_name,
    user_card.first_name
FROM
    member
INNER JOIN user_card ON user_card.id_user = member.id_member
WHERE
    first_name LIKE "%-%" OR last_name LIKE "%-%"
ORDER BY
    user_card.last_name,
    user_card.first_name;