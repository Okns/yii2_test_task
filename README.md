
1)установить зависимости:
composer install

2)поднять контейнеры:
docker-compose up -d

3)curl для проверки метода:

curl --location 'localhost:8000/queuestatuses/create' \
--header 'Accept: application/json' \
--form 'c_id="id_1"' \
--form 'c_name="c_name_1"' \
--form 'c_state="c_state_1"' \
--form 's_name="s_name_1"' \
--form 'a_type="a_type_1"' \
--form 'direction="direction_1"' \
--form 'activation="activation_1"' \
--form 'control="control_1"'