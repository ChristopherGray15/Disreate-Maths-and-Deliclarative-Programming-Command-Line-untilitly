def algorithm_a(x, y):
    p = x
    q = y
    #assert p == x
    while q > 0:
        p += 1
        q -= 1
    return p
