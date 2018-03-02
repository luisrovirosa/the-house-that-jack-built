# To check if Makefile has correct syntax (all must be tabs (^I), no spaces)
# cat -e -t -v Makefile
.PHONY: tests
tests:
	./vendor/bin/phpunit
