all: build up
.PHONY: all

up:
	mkdir -p srcs/mdb srcs/wp
	docker compose -f srcs/docker-compose.yml up
.PHONY: up

build:
	docker compose -f srcs/docker-compose.yml build
.PHONY: build

down:
	docker compose -f srcs/docker-compose.yml down
.PHONY: down

clean:
	docker compose -f srcs/docker-compose.yml down --rmi all --volumes --remove-orphans
	rm -rf srcs/mdb srcs/wp
.PHONY: clean
