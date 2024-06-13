SELECT * 
FROM page_counter_v2_page 
where request_uri like '%/page_trigger/%'
order by created_at desc
limit 1000
;

