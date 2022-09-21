code-analyse:
	composer php-stan
	composer infection
	composer test
test-coverage:
	composer test-coverage