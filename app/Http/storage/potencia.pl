potencia(_, 0, 1).
potencia(B, E, P):- E > 0,
	M is E-1,
	potencia(B, M, R),
	P is B * R.


produto(_, 0, 0).
produto(B, E, P):- E > 0,
	M is E-1,
	produto(B, M, R),
	P is B + R.

