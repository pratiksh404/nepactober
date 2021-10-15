# Above will be an example of pattern matching usage em Elixir

# Lets create an map of cake

chocolate_cake = %{cake: "chocolate"}
lemon_cake = %{cake: "lemon"}
carrot_cake = %{cake: "carrot"}

def match_only_chocolate_cakes(%{cake: "chocolate"}) do
  IO.puts("pattern matched with chocolate flavour! =]")
end

# It will outputs "pattern matched with chocolate flavour! =]"
match_only_chocolate_cakes(chocolate_cake)

# It will gives an pattern match exception
match_only_chocolate_cakes(lemon_cake)
