
#include "./1.1/types.h"
#include "./1.1/functions.h"

#if __vk_version__ >= 1.1
    #define VK_VERSION_1_1 1

    #ifndef VK_NO_PROTOTYPES
        #include "./1.1/prototypes.h"
    #endif
#endif
