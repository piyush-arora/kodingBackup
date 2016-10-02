/* Copyright (c) 2012 Nordic Semiconductor. All Rights Reserved.
 *
 * The information contained herein is confidential property of Nordic Semiconductor. The use,
 * copying, transfer or disclosure of such information is prohibited except by express written
 * agreement with Nordic Semiconductor.
 *
 */
 /**
  @addtogroup BLE_GATT Generic Attribute Profile (GATT) Common
  @{
  @brief  Common definitions and prototypes for the GATT interfaces.
 */

#ifndef BLE_GATT_H__
#define BLE_GATT_H__

#include "ble_types.h"
#include "ble_ranges.h"


/** @addtogroup BLE_GATT_DEFINES Defines
 * @{ */

/** @brief Default MTU size. */
#define GATT_MTU_SIZE_DEFAULT 23

/** @brief Only the default MTU size of 23 is currently supported. */
#define GATT_RX_MTU 23


/**@brief Invalid Attribute Handle. */
#define BLE_GATT_HANDLE_INVALID            0x0000

/** @defgroup BLE_GATT_TIMEOUT_SOURCES GATT Timeout sources
 * @{ */
#define BLE_GATT_TIMEOUT_SRC_PROTOCOL                  0x00 /**< ATT Protocol timeout. */
/** @} */

/** @defgroup BLE_GATT_WRITE_OPS GATT Write operations
 * @{ */
#define BLE_GATT_OP_INVALID                0x00  /**< Invalid Operation. */
#define BLE_GATT_OP_WRITE_REQ              0x01  /**< Write Request. */
#define BLE_GATT_OP_WRITE_CMD              0x02  /**< Write Command. */
#define BLE_GATT_OP_SIGN_WRITE_CMD         0x03  /**< Signed Write Command. */
#define BLE_GATT_OP_PREP_WRITE_REQ         0x04  /**< Prepare Write Request. */
#define BLE_GATT_OP_EXEC_WRITE_REQ         0x05  /**< Execute Write Request. */
/** @} */

/** @defgroup BLE_GATT_EXEC_WRITE_FLAGS GATT Execute Write flags
 * @{ */
#define BLE_GATT_EXEC_WRITE_FLAG_PREPARED_CANCEL 0x00
#define BLE_GATT_EXEC_WRITE_FLAG_PREPARED_WRITE  0x01
/** @} */

/** @defgroup BLE_GATT_HVX_TYPES GATT Handle Value operations
 * @{ */
#define BLE_GATT_HVX_INVALID               0x00  /**< Invalid Operation. */
#define BLE_GATT_HVX_NOTIFICATION          0x01  /**< Handle Value Notification. */
#define BLE_GATT_HVX_INDICATION            0x02  /**< Handle Value Indication. */
/** @} */

/** @defgroup BLE_GATT_STATUS_CODES GATT Status Codes
 * @{ */
#define BLE_GATT_STATUS_SUCCESS                           0x0000  /**< Success. */
#define BLE_GATT_STATUS_UNKNOWN                           0x0001  /**< Unknown or not applicable status. */
#define BLE_GATT_STATUS_ATTERR_INVALID                    0x0100  /**< ATT Error: Invalid Error Code. */
#define BLE_GATT_STATUS_ATTERR_INVALID_HANDLE             0x0101  /**< ATT Error: Invalid Attribute Handle. */
#define BLE_GATT_STATUS_ATTERR_READ_NOT_PERMITTED         0x0102  /**< ATT Error: Read not permitted. */
#define BLE_GATT_STATUS_ATTERR_WRITE_NOT_PERMITTED        0x0103  /**< ATT Error: Write not permitted. */
#define BLE_GATT_STATUS_ATTERR_INVALID_PDU                0x0104  /**< ATT Error: Used in ATT as Invalid PDU. */
#define BLE_GATT_STATUS_ATTERR_INSUF_AUTHENTICATION       0x0105  /**< ATT Error: Authenticated link required. */
#define BLE_GATT_STATUS_ATTERR_REQUEST_NOT_SUPPORTED      0x0106  /**< ATT Error: Used in ATT as Request Not Supported. */
#define BLE_GATT_STATUS_ATTERR_INVALID_OFFSET             0x0107  /**< ATT Error: Offset specified was past the end of the attribute. */
#define BLE_GATT_STATUS_ATTERR_INSUF_AUTHORIZATION        0x0108  /**< ATT Error: Used in ATT as Insufficient Authorisation. */
#define BLE_GATT_STATUS_ATTERR_PREPARE_QUEUE_FULL         0x0109  /**< ATT Error: Used in ATT as Prepare Queue Full. */
#define BLE_GATT_STATUS_ATTERR_ATTRIBUTE_NOT_FOUND        0x010A  /**< ATT Error: Used in ATT as Attribute not found. */
#define BLE_GATT_STATUS_ATTERR_ATTRIBUTE_NOT_LONG         0x010B  /**< ATT Error: Attribute cannot be read or written using read/write blob requests. */
#define BLE_GATT_STATUS_ATTERR_INSUF_ENC_KEY_SIZE         0x010C  /**< ATT Error: Encryption key size used is insufficient. */
#define BLE_GATT_STATUS_ATTERR_INVALID_ATT_VAL_LENGTH     0x010D  /**< ATT Error: Invalid value size. */
#define BLE_GATT_STATUS_ATTERR_UNLIKELY_ERROR             0x010E  /**< ATT Error: Very unlikely error. */
#define BLE_GATT_STATUS_ATTERR_INSUF_ENCRYPTION           0x010F  /**< ATT Error: Encrypted link required. */
#define BLE_GATT_STATUS_ATTERR_UNSUPPORTED_GROUP_TYPE     0x0110  /**< ATT Error: Attribute type is not a supported grouping attribute. */
#define BLE_GATT_STATUS_ATTERR_INSUF_RESOURCES            0x0111  /**< ATT Error: Encrypted link required. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE1_BEGIN           0x0112  /**< ATT Error: Reserved for Future Use range #1 begin. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE1_END             0x017F  /**< ATT Error: Reserved for Future Use range #1 end. */
#define BLE_GATT_STATUS_ATTERR_APP_BEGIN                  0x0180  /**< ATT Error: Application range begin. */
#define BLE_GATT_STATUS_ATTERR_APP_END                    0x019F  /**< ATT Error: Application range end. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE2_BEGIN           0x01A0  /**< ATT Error: Reserved for Future Use range #2 begin. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE2_END             0x01DF  /**< ATT Error: Reserved for Future Use range #2 end. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE3_BEGIN           0x01E0  /**< ATT Error: Reserved for Future Use range #3 begin. */
#define BLE_GATT_STATUS_ATTERR_RFU_RANGE3_END             0x01FC  /**< ATT Error: Reserved for Future Use range #3 end. */
#define BLE_GATT_STATUS_ATTERR_CPS_CCCD_CONFIG_ERROR      0x01FD  /**< ATT Common Profile and Service Error: Client Characteristic Configuration Descriptor improperly configured. */
#define BLE_GATT_STATUS_ATTERR_CPS_PROC_ALR_IN_PROG       0x01FE  /**< ATT Common Profile and Service Error: Procedure Already in Progress. */
#define BLE_GATT_STATUS_ATTERR_CPS_OUT_OF_RANGE           0x01FF  /**< ATT Common Profile and Service Error: Out Of Range. */
/** @} */


/** @defgroup BLE_GATT_CPF_FORMATS Characteristic Presentation Formats
 *  @note Found at http://developer.bluetooth.org/gatt/descriptors/Pages/DescriptorViewer.aspx?u=org.bluetooth.descriptor.gatt.characteristic_presentation_format.xml
 * @{ */
#define BLE_GATT_CPF_FORMAT_RFU                 0x00 /**< Reserved For Future Use. */
#define BLE_GATT_CPF_FORMAT_BOOLEAN             0x01 /**< Boolean. */
#define BLE_GATT_CPF_FORMAT_2BIT                0x02 /**< Unsigned 2-bit integer. */
#define BLE_GATT_CPF_FORMAT_NIBBLE              0x03 /**< Unsigned 4-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT8               0x04 /**< Unsigned 8-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT12              0x05 /**< Unsigned 12-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT16              0x06 /**< Unsigned 16-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT24              0x07 /**< Unsigned 24-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT32              0x08 /**< Unsigned 32-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT48              0x09 /**< Unsigned 48-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT64              0x0A /**< Unsigned 64-bit integer. */
#define BLE_GATT_CPF_FORMAT_UINT128             0x0B /**< Unsigned 128-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT8               0x0C /**< Signed 2-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT12              0x0D /**< Signed 12-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT16              0x0E /**< Signed 16-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT24              0x0F /**< Signed 24-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT32              0x10 /**< Signed 32-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT48              0x11 /**< Signed 48-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT64              0x12 /**< Signed 64-bit integer. */
#define BLE_GATT_CPF_FORMAT_SINT128             0x13 /**< Signed 128-bit integer. */
#define BLE_GATT_CPF_FORMAT_FLOAT32             0x14 /**< IEEE-754 32-bit floating point. */
#define BLE_GATT_CPF_FORMAT_FLOAT64             0x15 /**< IEEE-754 64-bit floating point. */
#define BLE_GATT_CPF_FORMAT_SFLOAT              0x16 /**< IEEE-11073 16-bit SFLOAT. */
#define BLE_GATT_CPF_FORMAT_FLOAT               0x17 /**< IEEE-11073 32-bit FLOAT. */
#define BLE_GATT_CPF_FORMAT_DUINT16             0x18 /**< IEEE-20601 format. */
#define BLE_GATT_CPF_FORMAT_UTF8S               0x19 /**< UTF-8 string. */
#define BLE_GATT_CPF_FORMAT_UTF16S              0x1A /**< UTF-16 string. */
#define BLE_GATT_CPF_FORMAT_STRUCT              0x1B /**< Opaque Structure. */
/** @} */

/** @defgroup BLE_GATT_CPF_NAMESPACES GATT Bluetooth Namespaces
 * @{
 */
#define BLE_GATT_CPF_NAMESPACE_BTSIG            0x01
#define BLE_GATT_CPF_NAMESPACE_DESCRIPTION_UNKNOWN 0x0000
/** @} */

/** @} */

/** @addtogroup BLE_GATT_STRUCTURES Structures
 * @{ */

/**@brief GATT Characteristic Properties. */
typedef struct
{
  /* Standard properties */
  uint8_t broadcast       :1; /**< Broadcasting of value permitted. */
  uint8_t read            :1; /**< Reading value permitted. */
  uint8_t write_wo_resp   :1; /**< Writing value with Write Command permitted. */
  uint8_t write           :1; /**< Writing value with Write Request permitted. */
  uint8_t notify          :1; /**< Notications of value permitted. */
  uint8_t indicate        :1; /**< Indications of value permitted. */
  uint8_t auth_signed_wr  :1; /**< Writing value with Signed Write Command permitted. */
} ble_gatt_char_props_t;

/**@brief GATT Characteristic Extended Properties. */
typedef struct
{
  /* Extended properties */
  uint8_t reliable_wr     :1; /**< Writing value with Queued Write Request permitted. */
  uint8_t wr_aux          :1; /**< Writing the Characteristic User Description permitted. */
} ble_gatt_char_ext_props_t;

#endif // BLE_GATT_H__

/** @} */

/**
  @}
  @}
*/
