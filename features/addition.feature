Feature: addition functionality of the calculator

  Scenario: addition will take two numbers and add them up
    Given I have provided 1 and 3
    When I add them up
    Then The result 4 will be returned

  Scenario: addition will take two negative numbers and add them up
    Given I have provided -1 and -3
    When I add them up
    Then The result -4 will be returned
