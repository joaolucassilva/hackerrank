run-test:
	composer test
code-analyse:
	composer php-stan
	composer infection
	composer test
test-coverage:
	composer test-coverage