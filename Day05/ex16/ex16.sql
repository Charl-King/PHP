SELECT
    COUNT(*) AS films
FROM
    member_history
WHERE
    (
        DATE BETWEEN '2006-10-30' AND '2007-07-27'
    ) OR `date` LIKE '%12-24%';
