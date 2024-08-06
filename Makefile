up:
	docker compose -f srcs/docker-compose.yml up --build
.PHONY: up

down:
	docker compose -f srcs/docker-compose.yml down
.PHONY: down

clean:
	docker compose -f srcs/docker-compose.yml down --rmi all --volumes --remove-orphans
.PHONY: clean
