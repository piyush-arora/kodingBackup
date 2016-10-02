#include "stm32f4xx.h"

#define LEDPORT (GPIOD)
#define LED1 (12)
#define LED2 (13)
#define ENABLE_GPIO_CLOCK (RCC->AHB1ENR |= RCC_AHB1ENR_GPIODEN)
#define GPIOMODER ((GPIO_MODER_MODER13_0|GPIO_MODER_MODER12_0))


int main(void)
{


  ENABLE_GPIO_CLOCK; 		 					// enable the clock to GPIO
  LEDPORT->MODER |= GPIOMODER;				// set pins to be general purpose output
  for (;;)
  {
     LEDPORT->ODR ^= (1<<LED1|1<<LED2); 		// toggle diodes
  }
  return 0;
}
