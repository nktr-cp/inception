#!/bin/bash -x

mkdir -p /etc/nginx/ssl

CERT_PATH=$(awk 'NR==1' /run/secrets/credentials)
CERT_KEY=$(awk 'NR==2' /run/secrets/credentials)
openssl req -x509 -nodes \
	-out ${CERT_PATH} \
	-keyout ${CERT_KEY} \
	-subj "/C=${COUNTRY}/ST=${STATE}/L=${LOCALITY}/O=${ORGANIZATION}/OU=${ORG_UNIT}/CN=${COMMON_NAME}/UID=${USER_ID}"

echo "===> Starting nginx..."
nginx -g "daemon off;"
