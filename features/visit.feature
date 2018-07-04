
Feature: Facturacion Electronica 
	Scenario: Debería haber un enlace en la página de inicio de sesión contraseña olvidada
		Given  I am on login "/login"
		Then I should see the text "¿Olvidó su contraseña?"



	Scenario: Debería tener saldo en su tarjeta caso contrario sera notificado para regular su pago
	Given  I am on Payment "/Payment"
	Then I should see the text2 "No hay saldo"
