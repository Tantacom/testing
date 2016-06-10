Feature: Calculator
  In order to sum two numbers
  As a website user
  I need to be able to input those numbers

  Scenario: View the calculator form
    Given I am on "/"
    Then I should see "Calculadora de Tanta"
    And I should not see "Resultado"

  Scenario: Calculate the sum of two numbers
    Given I am on "/"
    When I fill in the following:
      | op1 | 5 |
      | op2 | 7 |
    And I press "Operar"
    Then I should see "Resultado"
    And I should see "12"

  Scenario: Calculate the sum of two numbers
    Given I am on "/"
    When meto en el campo "op1" el valor "5"
    And meto en el campo "op2" el valor "3"
    And I press "Operar"
    Then I should see "Resultado"
    And I should see "8"
