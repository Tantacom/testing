Feature: Calculator
  In order to sum two numbers
  As a website user
  I need to be able to input those numbers

  Scenario: View the calculator form
    Given I am on "/"
    Then I should see "Calculadora de Tanta"
    And I should not see "Resultado"

  @javascript
  Scenario: Calculate the sum of two numbers
    Given I am on "/"
    When I fill in the following:
      | op1 | 5 |
      | op2 | 7 |
    And I press "Operar"
    Then I should see "Resultado"
    And I should see "12"

  @javascript
  Scenario: Calculate the sum of two numbers
    Given I am on "/"
    When I fill the field "op1" with "5"
    And I fill the field "op2" with "3"
    And I press "Operar"
    Then I should see "Resultado"
    And I should see "8"
