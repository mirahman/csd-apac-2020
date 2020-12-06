Feature: subtraction functionality of the calculator

  Scenario: subtraction will take two numbers and return the difference
    Given I have provided 6 and 2
    When I use the subtract functionality
    Then The result 4 will be returned
